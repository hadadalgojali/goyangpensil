import React, { Component } from 'react';
import ReactDOM from 'react-dom';
var page        = 0;
const children = [];
var url, id_blog, csrf_token = "";
const divStyle = {
  height:'320px'
};
const ChildComponent = props => (
    <div className="col-md-6 mb-4 mb-lg-4 col-lg-4">
      <a href={url+props.path+"/"+props.image+"."+props.ext} target="_blank">
        <div className="listing-item">
          <div className="listing-image" style={divStyle}>
            <img src={url+props.path+"/"+props.image+"."+props.ext} alt="new"/>
          </div>
        </div>
      </a>
    </div>
);

const ParentComponent = props => (
  <div className="site-section bg-light">
    <div className="container">
      <div className="row">
        { props.children }
      </div>
      <button className="btn btn-primary" onClick={props.addChild} disabled={props.disabled}>
        { props.disabled && <i className="fa fa-refresh fa-spin"></i> } Load more portofolio
      </button>
    </div>
  </div>
);

export default class _Image_blog_list extends Component {
    constructor(props) {
        super(props);
        url     = reactInit.url;
        id_blog = reactInit.id_blog;
        csrf_token = reactInit.csrf_token;
        this.displayData = [];
        this.loading = false;
        this.state = {
          showdata : this.displayData,
          loading   : false,
        }

        this.get_image = this.get_image.bind(this);
    }

    get_image(){
      this.setState({
        loading : true,
      });
      this.loading = true;
      fetch(url+"/json/image/blog", {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf_token
          },
          body : JSON.stringify({
            id_blog : id_blog,
            page    : page,
          })
        })
        .then(res => res.json())
        .then(
          (result) => {
            // console.log(result);
              if (result.portofolio.length > 0) {
                for (var i = 0; i < result.portofolio.length; i++) {
                  page += 1;
                  var path  = result.portofolio[i].group_image.path;
                  var image = result.portofolio[i].group_image.image;
                  var ext   = result.portofolio[i].group_image.ext;
                  this.displayData.push(<ChildComponent key={page} image={image} path={path} ext={ext} />);
                }
              }
              this.loading = false;
              this.setState({
                showdata  : this.displayData,
                loading   : false,
              });
          },
          // Note: it's important to handle errors here
          // instead of a catch() block so that we don't swallow
          // exceptions from actual bugs in components.
          (error) => {
            console.log(result);
          }
        );
    }

    render() {
        return (
          <ParentComponent addChild={this.get_image} disabled={this.loading}>
            {this.displayData}
          </ParentComponent>
        );
    }
}


if (document.getElementById('_image_blog_list')) {
    ReactDOM.render(<_Image_blog_list />, document.getElementById('_image_blog_list'));
}
