import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import logo from '../../assets/images/preload.gif';

export default class _PreLoader extends Component {
    render() {
        return (
          <div className="preloader-wrapper">
              <div className="preloader">
                <img src={logo} />
              </div>
          </div>
        );
    }
}

if (document.getElementById('_preloader')) {
    ReactDOM.render(<_PreLoader />, document.getElementById('_preloader'));
}
