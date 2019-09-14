import React, { Component } from 'react';
import { Button, Modal, ModalHeader, ModalBody, ModalFooter } from 'reactstrap';

export default class _Modal_login_regis extends Component {
    constructor(props) {
        super(props);
        console.log(props);
        this.showModal = props.showModal;
        this.state = ({
          showModal : this.showModal,
        });
    }

    toggelModal(){
      showModal = ! this.showModal;
    }

    render() {
        return (
            <div>
              <Modal isOpen={this.showModal}>
                <ModalHeader>
                  Modal heading
                </ModalHeader>
                <ModalBody>Woohoo, you're reading this text in a modal!</ModalBody>
                <ModalFooter>
                  <Button variant="secondary">
                    Close
                  </Button>
                  <Button variant="primary" >
                    Save Changes
                  </Button>
                </ModalFooter>
              </Modal>
            </div>
        );
    }
}
