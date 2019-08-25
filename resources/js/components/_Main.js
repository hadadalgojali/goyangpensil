import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import _Header from './layout/_Header';
import _Footer from './layout/_Footer';

export default class _Main extends Component {
    render() {
        return (
          <div>
            <_Header/>
            { /*<footer class="site-footer">
              <div class="container">
                <_Footer/>
              </div>
            </footer>*/}
          </div>
        );
    }
}

if (document.getElementById('_main')) {
    ReactDOM.render(<_Main />, document.getElementById('_main'));
}
