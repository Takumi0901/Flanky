import * as ActionTypes from '../constants/ActionTypes'

export default function tabReducer(state={index : {action: 0}}, action) {
  switch(action.type){
    case ActionTypes.TAB_ACTIVE:
      return {index: action}
    default:
      return state;
  }
}