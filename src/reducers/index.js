// @flow

import {combineReducers} from 'redux';

import preview from './preview';
import view from './view';

export default combineReducers({
	preview,
	view,
});
