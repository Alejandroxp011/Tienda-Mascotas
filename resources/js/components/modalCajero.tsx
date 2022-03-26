import React, { Component, FunctionComponent, useState } from "react";
import { render } from "react-dom";
import { Modal } from './modal/modal';
import { ConfirmationModal } from "./confirmation-modal/confirmation-modal";
import { useModal } from './useModal';
import ReactDOM from 'react-dom';

const ModalCajero: FunctionComponent = () => {
  const { isShown, toggle } = useModal();
  
  const onConfirm = () => toggle();
  const onCancel = () => toggle();

  return (
    <React.Fragment>
      <button onClick={toggle}> + </button>
    
      <Modal
          isShown={isShown}
          hide={toggle}
          headerText='Confirmation'
          modalContent={
            <ConfirmationModal 
              onConfirm={onConfirm} 
              onCancel={onCancel}
              message='No se guardaran los cambios :v'
            />
          }
        />
    </React.Fragment>

  );
};

render(<ModalCajero />, document.getElementById("root"));