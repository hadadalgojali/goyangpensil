import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Button from 'react-bootstrap/Button'
import toaster from 'toasted-notes';
import 'toasted-notes/src/styles.css'; // optional styles
import _Toggle from './_Toggle_username';
var url, csrf_token = "";
const button_right = {
    float: "right",
};
export default class _Form_profil extends Component {
    constructor(props) {
        super(props);
        csrf_token  = reactInit.csrf_token;
        url         = reactInit.url;
        this.state  = {
            loading         : false,
            load_password   : false,
            check_username  : false,
            check_password  : false,
            typingTimer     : '',
            typingInterval  : 3000,
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
                        loading : false,
                    });
                    this.onActive_button();
                }
            );
        }else if(txt_username.length == 0){
            this.setState({
              loading : false,
            });
        }
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
        fetch(url+"register.custom", {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf_token
            },
            body : {
                username : $("#txt_username").val(),
                password : $("#txt_password").val(),
            }
        })
        .then(res => res.json())
        .then(
            (result) => {
            }
        );
    }

    render() {
        return (
          <>
            <_Toggle/>
            <div className="input-group form-group">
                <div className="input-group-prepend">
                    <span className="input-group-text">
                        { this.state.loading == true && <i className="loader"></i> }
                        { this.state.loading == false && <i className="fa fa-user"></i> }
                    </span>
                </div>
                <input type="text" className="form-control" placeholder="Username" id="txt_username" name="username" onKeyUp={this.onKeyUp_username.bind(this)} onKeyDown={this.onKeyDown_username.bind(this)}/>
            </div>
            <div className="input-group form-group">
                <div className="input-group-prepend">
                    <span className="input-group-text">
                        <i className="fa fa-key"></i>
                    </span>
                </div>
                <input type="password" className="form-control" placeholder="Password" id="txt_password" name="password" />
            </div>
            <div className="input-group form-group">
                <div className="input-group-prepend">
                    <span className="input-group-text">
                        { this.state.load_password == true && <i className="loader"></i> }
                        { this.state.load_password == false && <i className="fa fa-key"></i> }
                    </span>
                </div>
                <input type="password" className="form-control" placeholder="Retype Password" id="txt_re_password" name="password"  onKeyUp={this.onKeyUp_password.bind(this)} onKeyDown={this.onKeyDown_password.bind(this)}/>
            </div>
          </>
        );
    }
}

if (document.getElementById('_form_profil')) {
    ReactDOM.render(<_Form_profil />, document.getElementById('_form_profil'));
}
