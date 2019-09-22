import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Modal from 'react-bootstrap/Modal';
import ModalDialog from 'react-bootstrap/ModalDialog';
import ModalHeader from 'react-bootstrap/ModalHeader';
import ModalTitle from 'react-bootstrap/ModalTitle';
import ModalBody from 'react-bootstrap/ModalBody';
import ModalFooter from 'react-bootstrap/ModalFooter';
import Button from 'react-bootstrap/Button'

export default class _Modal_package extends Component {
    constructor(props) {
        super(props);
        console.log(props);
        this.state = {
            loading : false,
            setShow : false,
        }
    }

    onActive(e){
        this.setState({
            setShow : true,
        });
    }
    onDeActive(e){
        this.setState({
            setShow : false,
        });
    }

    render() {
        return (
            <div>
                <button variant="primary" onClick={this.onActive.bind(this)}>A</button>

                <Modal show={this.state.setShow} onHide={this.onDeActive.bind(this)}>
                    <Modal.Header closeButton>
                    <Modal.Title>Modal heading</Modal.Title>
                    </Modal.Header>
                    <Modal.Body>Woohoo, you're reading this text in a modal!</Modal.Body>
                    <Modal.Footer>
                    <Button variant="secondary" onClick={this.onDeActive.bind(this)}>
                        Close
                    </Button>
                    <Button variant="primary" onClick={this.onDeActive.bind(this)}>
                        Save Changes
                    </Button>
                    </Modal.Footer>
                </Modal>
            </div>
        );
    }
}

if (document.getElementById('_modal_package')) {
    ReactDOM.render(<_Modal_package />, document.getElementById('_modal_package'));
}
