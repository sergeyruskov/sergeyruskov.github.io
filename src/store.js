import { createStore } from 'redux';
import rootReducer from './rootReducer';
import initialState from './initialState';

export default function configureStore() {
	let LS;
	if (localStorage.ged) {
		//todo raskomenti
		// LS = JSON.parse(localStorage.ged);
	}
	const store = createStore(
		rootReducer,
		LS || initialState,
	);
	store.subscribe(() => {
		localStorage.ged = JSON.stringify(store.getState());
	});
	return store;
}
