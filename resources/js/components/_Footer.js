import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class _Footer extends Component {
    render() {
        return (
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top">
            <p>
            {/* Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. */}
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            {/* Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. */}
            </p>
            </div>
          </div>

        </div>
        );
    }
}

if (document.getElementById('_footer')) {
    ReactDOM.render(<_Footer />, document.getElementById('_footer'));
}
