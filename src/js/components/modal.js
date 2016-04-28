import React from 'react'

export default class Modal extends React.Component{
  handleClickOpen(){
    this.props.modalAction(true);
  }

  handleClickClose(){
    this.props.modalAction(false);
  }

	render(){
    let modalOpen = this.props.action.click;
		return(
		  <div className="c-container">
        <h1 className="c-title c-title--primary">Modal</h1>
        <button className="c-btn c-btn-primary--flat" onClick={this.handleClickOpen.bind(this)}>Modal Open</button>
        <div className="c-modal" aria-clicked={modalOpen === true ? 'true' : 'false'}>
          <div className="c-modal__panel">
            <div className="c-modal__header">
              モーダルタイトル
            </div>
            <div className="c-modal__content">
              modal
            </div>
            <div className="c-modal__bottom">
              <button className="c-btn c-btn-default--flat js-modal-close-btn" onClick={this.handleClickClose.bind(this)}>閉じる</button>
            </div>
            <i className="js-modal-close-btn c-modal__close fa fa-times-circle" onClick={this.handleClickClose.bind(this)}></i>
          </div>
          <div className="c-modal__overlay" onClick={this.handleClickClose.bind(this)}></div>
        </div>
      </div>  
		)
	}
}