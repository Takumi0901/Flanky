import React  from 'react';
import ReactDOM  from 'react-dom';
import { Provider } from 'react-redux';
import { IndexRoute, Router, Route, Link, browserHistory, RouteHandler } from 'react-router'
import configureStore from './store/reduxStore';
import App from './containers/App';
import Intro from './containers/Intro';
import Modal from './containers/Modal';
// import Comment from './containers/CommentBox';

const store = configureStore();

ReactDOM.render(
  <Provider store={store}>
    	<Router history={browserHistory}>
		    <Route path="/" component={App}>
		        <IndexRoute component={Intro} />
		        <Route path="/intro" component={Intro}></Route>
		    </Route>
		  </Router>
  </Provider>,
  document.getElementById('content')
);
