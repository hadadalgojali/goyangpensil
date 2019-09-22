import React, { Component } from 'react';
import { Button } from 'reactstrap';
// import _Modal_login_regis from './_Modal_login_regis';
import ReactDOM from 'react-dom';
var isShow = false;

class _Header extends Component {
  
    render() {
    // const [show, setShow] = useState(false);

        return (
          <div>
            <div className="site-mobile-menu">
              <div className="site-mobile-menu-header">
                <div className="site-mobile-menu-close mt-3">
                  <span className="icon-close2 js-menu-toggle"></span>
                </div>
              </div>
              <div className="site-mobile-menu-body"></div>
            </div>

            <header className="site-navbar container py-0 bg-white" role="banner">
                <div className="row align-items-center">
                  {/* LOGO */}
                  <div className="col-6 col-xl-2">
                    <h1 className="mb-0 site-logo"><a href="/" className="text-black mb-0">Goyang<span className="text-primary">Pensil</span>  </a></h1>
                  </div>
                  {/* LOGO */}

                  {/* MENU */}
                  <div className="col-12 col-md-10 d-none d-xl-block">
                    <nav className="site-navigation position-relative text-right" role="navigation">
                      <ul className="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/pages/product">Product</a></li>
                        <li className="has-children">
                          <a href="#">Layanan</a>
                          <ul className="dropdown">
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="/pages/category">Teknik Menggambar</a></li>
                            <li><a href="/pages/contact">Kontak</a></li>
                            <li><a href="#">Kerja sama</a></li>
                          </ul>
                        </li>
                          {sess_id.length > 0 &&
                            <li className="has-children">
                              <a href="#">Option</a>
                              <ul className="dropdown" style={{ marginLeft:"-50px"}}>
                                <li><a href="/pages/profil">Profilku</a></li>
                                <li><a href="/pages/category">Projectku</a></li>
                                <li><a href="/logout">Logout</a></li>
                              </ul>
                            </li>
                          }
                          {sess_id.length == 0 &&
                            <li className="ml-xl-3">
                              <a href="/login">Masuk</a>
                            </li>
                          }
                      </ul>
                    </nav>
                  </div>
                  {/* MENU */}

                  {/* BUTTON TOGGLE */}
                    <div className="d-inline-block d-xl-none ml-auto py-3 col-6 text-right">
                      <a href="#" className="site-menu-toggle js-menu-toggle text-black"><span className="icon-menu h3"></span></a>
                    </div>
                  {/* BUTTON TOGGLE */}
                </div>
            </header>
          </div>
        );
    }
}

if (document.getElementById('_header')) {
    ReactDOM.render(<_Header />, document.getElementById('_header'));
}
