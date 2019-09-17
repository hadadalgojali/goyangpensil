import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import toaster from 'toasted-notes';
import 'toasted-notes/src/styles.css'; // optional styles
var url, csrf_token = "";

export default class _CMP_password_reg extends Component {
    constructor(props) {
        super(props);
        csrf_token = reactInit.csrf_token;
        url     = reactInit.url;
        this.state = {
            loading : false,
            check : false,
        }
    }

    onActive(e){
        this.setState({
          loading : true,
        });

        var txt_password    = $("#txt_password").val();
        var txt_password_re = $("#txt_password_re").val();

        if(txt_password_re.length >= txt_password.length){
            if(txt_password !== txt_password_re){
                toaster.notify("Password tidak sama");
            }
        }
        // console.log($("#txt_username").val());
    }
    
    render() {
        return (
          <div>
                <div className="input-group form-group">
                    <div className="input-group-prepend">
                        <span className="input-group-text"><i className="fa fa-key"></i></span>
                    </div>
                    <input type="password" className="form-control" id="txt_password" placeholder="Password" name="password"/>
                </div>
                <div className="input-group form-group">
                    <div className="input-group-prepend">
                        <span className="input-group-text"><i className="fa fa-key"></i></span>
                    </div>
                    <input type="password" className="form-control" id="txt_password_re" placeholder="Re-type Password" name="re_password"  onKeyUp={this.onActive.bind(this)} />
                </div>
          </div>
        );
    }
}

if (document.getElementById('_cmp_password_reg')) {
    ReactDOM.render(<_CMP_password_reg />, document.getElementById('_cmp_password_reg'));
}
