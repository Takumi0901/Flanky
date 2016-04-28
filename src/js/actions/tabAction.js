import * as ActionTypes from '../constants/ActionTypes'

export function tabActive(action) {
  return {
    type: ActionTypes.TAB_ACTIVE,
    action
  };
}