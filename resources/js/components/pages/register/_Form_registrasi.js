import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Button from 'react-bootstrap/Button'
import toaster from 'toasted-notes';
import 'toasted-notes/src/styles.css'; // optional styles
var url, csrf_token = "";
const button_right = {
    float: "right",
};
export default class _Form_registrasi extends Component {
    constructor(props) {
        super(props);
        csrf_token  = reactInit.csrf_token;
        url         = reactInit.url;
        this.state  = {
            loading         : false,
            load_password   : false,
            load_button     : false,
            check_username  : false,
            check_password  : false,
            typingTimer     : '',
            typingInterval  : 1000,
            btn_disable     : true,
        }
    }

    onKeyDown_username(e){
        clearTimeout(this.state.typingTimer);
    }

    onKeyDown_password(e){
        clearTimeout(this.state.typingTimer);
    }

    onKeyUp_username(e){
        clearTimeout(this.state.typingTimer);
        this.setState({
          loading       : true,
          btn_disable   : true,
          typingTimer   : setTimeout(this.onCheck_Username.bind(this), this.state.typingInterval),
        });
    }

    onKeyUp_password(e){
        clearTimeout(this.state.typingTimer);
        this.setState({
            btn_disable     : true,
            load_password   : true,
            typingTimer     : setTimeout(this.onCheck_password.bind(this), this.state.typingInterval),
        });
    }

    onCheck_password(e){
        if($("#txt_password").val() == $("#txt_re_password").val()){
            this.setState({
                check_password  : true,
                load_password   : false,
            });
            toaster.notify("Password sudah sama");
        }else{
            this.setState({
                check_password  : false,
                load_password   : false,
            });
            toaster.notify("Password tidak sama");
        }
        this.onActive_button();
    }

    onCheck_Username(e){
        this.setState({
          loading     : true,
        });
        var txt_username = $("#txt_username").val();
        // if(txt_username.length > 4){
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
                            check_username  : true,
                        });
                        toaster.notify("Username tersedia");
                    }else{
                        this.setState({
                            check_username : false,
                        });
                        toaster.notify("Username tidak tersedia/ sudah ada");
                    }
                    this.setState({
                        loading     : false,
                    });
                    this.onActive_button();
                }
            );
        // }else if(txt_username.length == 0){
        //     this.setState({
        //       loading : false,
        //     });
        // }
    }

    onActive_button(){
        if(this.state.check_password === true && this.state.check_username === true){
            this.setState({
                btn_disable : false,
            });
        }else{
            this.setState({
                btn_disable : true,
            });
        }
    }

    onSave(e){
      this.setState({
        load_button : true,
        btn_disable : true,
      });
        fetch(url+"/json/auth/register", {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf_token
            },
            body : JSON.stringify({
                username : $("#txt_username").val(),
                password : $("#txt_password").val(),
            }),
        })
        .then(res => res.json())
        .then(
            (result) => {
              if (result.code == 200 ) {
                if (result.login === true ) {
                  window.location = url;
                }else{
                  window.location = url+"/login";
                }
              }else{
                toaster.notify(result.message);
              }

              this.setState({
                load_button : false,
                btn_disable : false,
              });
            }
        );
    }

    render() {
        return (
          <div>
            <div className="wrap-input100 validate-input" data-validate = "Valid username is required">
              <input className="input100" type="text" id="txt_username" name="username" placeholder="Username"  onKeyUp={this.onKeyUp_username.bind(this)} onKeyDown={this.onKeyDown_username.bind(this)}/>
              <span className="focus-input100"></span>
              <span className="symbol-input100">
                  { this.state.loading == true && <i className="loader"></i> }
                  { this.state.loading == false && <i className="fa fa-user"></i> }
              </span>
            </div>
            <div className="wrap-input100 validate-input" data-validate = "Valid password is required">
              <input className="input100" type="password" id="txt_password" name="password" placeholder="Password" />
              <span className="focus-input100"></span>
              <span className="symbol-input100">
                <i className="fa fa-key" aria-hidden="true"></i>
              </span>
            </div>
            <div className="wrap-input100 validate-input" data-validate = "Valid re password have same">
              <input className="input100" type="password" id="txt_re_password" name="txt_re_password" placeholder="Retype Password" onKeyUp={this.onKeyUp_password.bind(this)} onKeyDown={this.onKeyDown_password.bind(this)}/>
              <span className="focus-input100"></span>
              <span className="symbol-input100">
                  { this.state.load_password == true && <i className="loader"></i> }
                  { this.state.load_password == false && <i className="fa fa-key"></i> }
              </span>
            </div>
            <div className="container-login100-form-btn">
              <Button disabled={this.state.btn_disable} className="login100-form-btn" onClick={this.onSave.bind(this)}> { this.state.load_button == true && <i className="loader"></i> } Register</Button>
            </div>
          </div>
        );
    }
}

if (document.getElementById('_form_registrasi')) {
    ReactDOM.render(<_Form_registrasi />, document.getElementById('_form_registrasi'));
}
