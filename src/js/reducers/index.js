import {combineReducers} from "redux"
import tabReducer from "./tabReducer"
import headerReducer from "./headerReducer"
import modalReducer from "./modalReducer"

const todoApp = combineReducers({
  tabReducer,
  headerReducer,
  modalReducer
});

export default todoApp