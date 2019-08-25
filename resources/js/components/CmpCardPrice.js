import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class CmpCardPrice extends Component {
    constructor(props){
      super();
      console.log(props);
    }

    render() {
        return (
          <div>
            <h2>{this.state.article}</h2>
            <h3>Net</h3>
          </div>
        );
    }
}

if (document.getElementById('cmpcardprice')) {
    ReactDOM.render(<CmpCardPrice />, document.getElementById('cmpcardprice'));
}
