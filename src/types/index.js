// @flow

import type { Store as ReduxStore, Dispatch as ReduxDispatch } from 'redux';

import type { PreviewType, ViewType, ActionList } from './cards';

export type State = PreviewType & ViewType;

export type Action = ActionList;

export type Store = ReduxStore<State, Action>;

export type Dispatch = ReduxDispatch<Action>;
