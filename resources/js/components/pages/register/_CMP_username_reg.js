import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import toaster from 'toasted-notes';
import 'toasted-notes/src/styles.css'; // optional styles
var url, csrf_token = "";

export default class _CMP_username_reg extends Component {
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
        var txt_username = $("#txt_username").val();
        if(txt_username.length > 4){
            fetch(url+"/json/auth/check_username", {
                method: 'POST',
                headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf_token
                },
                body : JSON.stringify({
                    username : txt_username,
                })
            })
            .then(res => res.json())
            .then(
                (result) => {
                    if(result.status === true){
                        this.setState({
                            check : true,
                        });
                        toaster.notify("Username tersedia");
                    }else{
                        this.setState({
                            check : false,
                        });
                        toaster.notify("Username tidak tersedia/ sudah ada");
                    }
                    this.setState({
                        loading : false,
                    });
                }
            );
        }else if(txt_username.length == 0){
            this.setState({
              loading : false,
            });
        }
        // console.log($("#txt_username").val());
    }
    
    render() {
        return (
          <div>
            <div className="input-group form-group">
                <div className="input-group-prepend">
                    <span className="input-group-text">
                        { this.state.loading == true && <i className="loader"></i> }
                        { this.state.loading == false && this.state.check == false && <i className="fa fa-user"></i> }
                        { this.state.loading == false && this.state.check == true && <i className="fa fa-check"></i> }
                    </span>
                </div>
                <input type="text" className="form-control" placeholder="Username" id="txt_username" name="username" onKeyUp={this.onActive.bind(this)} />
            </div>
          </div>
        );
    }
}

if (document.getElementById('_cmp_username_reg')) {
    ReactDOM.render(<_CMP_username_reg />, document.getElementById('_cmp_username_reg'));
}
