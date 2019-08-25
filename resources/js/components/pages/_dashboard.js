import React, { Component } from 'react';

export default class _dashboard extends Component {
    render() {
        return (
          <div>
            <div className="site-blocks-cover overlay" data-aos="fade" data-stellar-background-ratio="0.5">
              <div className="container">
                <div className="row align-items-center justify-content-center text-center">
                  <div className="col-md-12">
                    <div className="row justify-content-center mb-4">
                      <div className="col-md-8 text-center">
                        <h1 className="" data-aos="fade-up">Abadikan kenanganmu disini</h1>
                        <p data-aos="fade-up" data-aos-delay="100"></p>
                      </div>
                    </div>
                    <div className="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
                      <form method="post">
                        <div className="row align-items-center">
                          <div className="col-lg-12 mb-6 mb-xl-0 col-xl-6">
                            <input type="text" className="form-control rounded" placeholder="Apa yang anda cari?" />
                          </div>
                          <div className="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                            <div className="select-wrap">
                              <span className="icon"><span className="icon-keyboard_arrow_down"></span></span>
                              { /* <select className="form-control rounded" name="" id="">
                                <option value="">All Categories</option>
                                @foreach ($category as $item)
                                  <option value="{{ $item->id }}">{{ $item->category }}</option>
                                @endforeach
                              </select> */ }
                              <select className="form-control rounded" value={['B', 'C']} />
                            </div>
                          </div>
                          <div className="col-lg-12 col-xl-2 ml-auto text-right">
                            <input type="submit" className="btn btn-primary btn-block rounded" value="Search" />
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        );
    }
}
