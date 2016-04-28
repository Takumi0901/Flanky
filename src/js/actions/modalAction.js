import * as ActionTypes from '../constants/ActionTypes'

export function modalAction(click) {
  return {
    type: ActionTypes.MODAL_OPEN,
    click
  };
}