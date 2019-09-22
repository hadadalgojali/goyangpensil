import React, { Component } from 'react';
import Switch from 'react-switch';
import 'toasted-notes/src/styles.css'; // optional styles

export default class _Toggle_username extends Component {
    constructor(props) {
        super(props);
        this.state  = {
            checked    : false
        }
        this.handleChange = this.handleChange.bind(this);
    }

    handleChange(checked) {
        this.setState({ checked });
    }

    render() {
        return ( 
            <>
            
            <div className="row">
                <div className="col-md-12">
                    <label htmlFor="material-switch">
                    <span>Ganti username : </span>
                        <Switch 
                            checked={this.state.checked}
                            onChange={this.handleChange}
                            onColor="#86d3ff"
                            onHandleColor="#2693e6"
                            handleDiameter={20}
                            uncheckedIcon={false}
                            checkedIcon={false}
                            boxShadow="0px 1px 5px rgba(0, 0, 0, 0.6)"
                            activeBoxShadow="0px 0px 1px 10px rgba(0, 0, 0, 0.2)"
                            height={15}
                            width={30}
                            className="react-switch"
                            id="material-switch" 
                        />
                    </label>
                </div>
            </div>
            </>
        );
    }
}
