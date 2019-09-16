import React, { Component } from 'react';
import ReactDOM from 'react-dom';
var url, csrf_token = "";

export default class _CMP_username_reg extends Component {
    constructor(props) {
        super(props);
        csrf_token = reactInit.csrf_token;
        url     = reactInit.url;
    }

    onActive(e){
        var txt_username = $("#txt_username").val();
        
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
                console.log(result);
            }
        );
        // console.log($("#txt_username").val());
    }
    
    render() {
        return (
          <div>
            <div className="input-group form-group">
                <div className="input-group-prepend">
                    <span className="input-group-text"><i className="fa fa-user"></i></span>
                </div>
                <input type="text" className="form-control" placeholder="Username" id="txt_username" name="username" onKeyUp={this.onActive} />
            </div>
          </div>
        );
    }
}

if (document.getElementById('_cmp_username_reg')) {
    ReactDOM.render(<_CMP_username_reg />, document.getElementById('_cmp_username_reg'));
}
