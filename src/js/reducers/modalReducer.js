import * as ActionTypes from '../constants/ActionTypes'

export default function modalReducer(state={action: {click : false}}, action) {
  switch(action.type){
    case ActionTypes.MODAL_OPEN:
      return {action: action}
    default:
      return state;
  }
}