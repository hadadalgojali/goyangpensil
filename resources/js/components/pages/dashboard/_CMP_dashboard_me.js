import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class _CMP_dashboard_me extends Component {
    render() {
        return (
          <div>
            <div className="row justify-content-center mb-5">
              <div className="col-md-7 text-center border-primary">
                <h2 className="font-weight-light text-primary">Kenapa kami ?</h2>
                <p className="color-black-opacity-5">Cari tahu kenapa anda harus memilih kami.</p>
              </div>
            </div>

            <div className="row mb-3 align-items-stretch">
              <div className="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div className="h-entry">
                  <h2 className="font-size-regular"><a className="text-black"><span className="fa fa-users"></span> Menjadi teman baik</a></h2>
                  <p>Kami selalu berupaya menjalin hubungan mitra kerja sama sebaik mungkin, karena kami percaya memiliki hubungan yang baik dapat mempermudah tujuan kita client maupun develop.</p>
                </div>
              </div>
              <div className="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div className="h-entry">
                  <h2 className="font-size-regular"><a className="text-black"><span className="fa fa-wrench"></span> Perbaikan dan revisi</a></h2>
                  <p>Kepuasan pelanggan menjadi prioritas utama bagi kami, karena itu kami memberi kesempatan pada pelanggan untuk merevisi hasil kerja dari kami.</p>
                </div>
              </div>
              <div className="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div className="h-entry">
                  <h2 className="font-size-regular"><a className="text-black"><span className="fa fa-dollar"></span> Biaya terjangkau</a></h2>
                  <p>Kami berani bersaing dengan vendor lain mengenai harga yang kami tawarkan, dijamin murah dengan kualitas barang yang tentunya tidak murahan.</p>
                </div>
              </div>
            </div>
          </div>
        );
    }
}

if (document.getElementById('cmp_dashboard_me')) {
    ReactDOM.render(<_CMP_dashboard_me />, document.getElementById('cmp_dashboard_me'));
}
