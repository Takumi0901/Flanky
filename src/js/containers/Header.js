import React, { Component } from 'react';
import { bindActionCreators } from 'redux'
import { connect } from 'react-redux';
import { Link } from 'react-router';
import Header from '../components/header';
import * as headerActions from '../actions/headerAction';

function mapStateToProps(state) {
  return {
    scroll: state.headerReducer.scroll
  };
}

function mapDispatchToProps(dispatch) {
  return bindActionCreators(headerActions, dispatch)
}

export default connect(mapStateToProps, mapDispatchToProps)(Header)