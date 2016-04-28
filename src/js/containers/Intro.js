import React, { Component } from 'react'
import { connect } from 'react-redux';
import Tab from '../containers/Tab';
import Modal from '../containers/Modal';

export default class Intro extends Component {
  render() {
    return (
      <div>
        <Tab />
        <Modal />
      </div>
    )
  }
}

function mapStateToProps(state) {
  return {};
}

export default connect(mapStateToProps)(Intro);