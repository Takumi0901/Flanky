import React, { Component } from 'react';
import { bindActionCreators } from 'redux'
import { connect } from 'react-redux';
import { Link } from 'react-router';
import Modal from '../components/modal';
import * as modalActions from '../actions/modalAction';

function mapStateToProps(state) {
  return {
    action: state.modalReducer.action
  };
}

function mapDispatchToProps(dispatch) {
  return bindActionCreators(modalActions, dispatch)
}

export default connect(mapStateToProps, mapDispatchToProps)(Modal)