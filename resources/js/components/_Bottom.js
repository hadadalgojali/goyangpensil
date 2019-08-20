import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class _Bottom extends Component {
    render() {
        return (
          <div className="row">
            <div className="col-md-9">
              <div className="row">
                <div className="col-md-6">
                  <h2 className="footer-heading mb-4">About</h2>
                  <p>-</p>
                </div>

                <div className="col-md-3">
                  <h2 className="footer-heading mb-4">Navigations</h2>
                  <ul className="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <div className="col-md-3">
                  <h2 className="footer-heading mb-4">Follow Us</h2>
                  <a href="#" className="pl-0 pr-3"><span className="icon-facebook"></span></a>
                  <a href="#" className="pl-3 pr-3"><span className="icon-twitter"></span></a>
                  <a href="#" className="pl-3 pr-3"><span className="icon-instagram"></span></a>
                  <a href="#" className="pl-3 pr-3"><span className="icon-linkedin"></span></a>
                </div>
              </div>
            </div>
          </div>
        );
    }
}

if (document.getElementById('_bottom')) {
    ReactDOM.render(<_Bottom />, document.getElementById('_bottom'));
}
