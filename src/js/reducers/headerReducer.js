import * as ActionTypes from '../constants/ActionTypes'

export default function headerReducer(state={scroll : {down: false}}, action) {
  switch(action.type){
    case ActionTypes.SLIDE_HEADER:
      return {scroll: action}
    default:
      return state;
  }
}