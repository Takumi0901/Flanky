import {createStore,  applyMiddleware} from 'redux';
import rootReducer from '../reducers/index'
import createLogger from 'redux-logger';

export default function configureStore() {
  const logger = createLogger({logger:console});
  // const createStoreWithMiddleware = applyMiddleware()(createStore);
  const createStoreWithMiddleware = applyMiddleware(
    logger
  )(createStore);
  const store = createStoreWithMiddleware(rootReducer);
  return store;
}
