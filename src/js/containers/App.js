import React, { Component } from 'react'
import { connect } from 'react-redux';
import Footer from '../components/footer';
import Header from '../containers/Header';
import Intro from '../containers/Intro';
import Modal from '../containers/Modal';

export default class App extends Component {
  render() {
    return (
      <div className="u-pt-64">
        <Header />
          <div className="l-wrapper">{ this.props.children }</div>
        <Footer />
      </div>
    )
  }
}

function mapStateToProps(state) {
  return {};
}

export default connect(mapStateToProps)(App);