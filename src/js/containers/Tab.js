import React, { Component } from 'react';
import { bindActionCreators } from 'redux'
import { connect } from 'react-redux';
import { Link } from 'react-router';
import Tab from '../components/tab';
import * as tabActions from '../actions/tabAction';

function mapStateToProps(state) {
  return {
    index: state.tabReducer.index
  };
}

function mapDispatchToProps(dispatch) {
  return bindActionCreators(tabActions, dispatch)
}

export default connect(mapStateToProps, mapDispatchToProps)(Tab)