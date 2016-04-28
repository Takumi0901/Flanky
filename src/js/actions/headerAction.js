import * as ActionTypes from '../constants/ActionTypes'

export function headerAction(down) {
  return {
    type: ActionTypes.SLIDE_HEADER,
    down
  };
}