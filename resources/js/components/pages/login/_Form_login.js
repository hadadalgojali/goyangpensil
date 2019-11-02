import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Button from 'react-bootstrap/Button'
import toaster from 'toasted-notes';
import 'toasted-notes/src/styles.css'; // optional styles
var url, csrf_token = "";
const button_right = {
    float: "right",
};
export default class _Form_login extends Component {
    constructor(props) {
        super(props);
        csrf_token  = reactInit.csrf_token;
        url         = reactInit.url;
        this.state  = {
            loading         : false,
            btn_disable     : false,
        }
    }

    onLogin(e){
        this.setState({
            btn_disable : true,
        });
        fetch(url+"/json/auth/login", {
            method  : 'POST',
            dataType: 'json',
            encode  : true,
            headers : {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf_token
            },
            body : JSON.stringify({
                username : $("#txt_username").val(),
                password : $("#txt_password").val(),
            })
        })
        .then(res => res.json())
        .then(
            (result) => {
              if (result.code == 200) {
                window.location = url;
              }else{
                toaster.notify("Cek kembali username dan password anda");
              }
                  this.setState({
                      btn_disable : false,
                  });
            }
        );
    }

    render() {
        return (
          <div>
            <div className="wrap-input100 validate-input" data-validate = "Valid username is required">
              <input className="input100" type="text" id="txt_username" name="username" placeholder="Username" />
              <span className="focus-input100"></span>
              <span className="symbol-input100">
                <i className="fa fa-user" aria-hidden="true"></i>
              </span>
            </div>

            <div className="wrap-input100 validate-input" data-validate = "Password is required">
              <input className="input100" type="password" id="txt_password" name="password" placeholder="Password" />
              <span className="focus-input100"></span>
              <span className="symbol-input100">
                <i className="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <div className="container-login100-form-btn">
              <Button  disabled={this.state.btn_disable} className="login100-form-btn" onClick={this.onLogin.bind(this)} >Login</Button>
            </div>
          </div>
        );
    }
}

if (document.getElementById('_form_login')) {
    ReactDOM.render(<_Form_login />, document.getElementById('_form_login'));
}
