export default class Akses{
	constructor(user) {
		 this.user=user;
	}
	
	admin(){
		return this.user.role === 'admin';
	}

	isUser(){
		return this.user.role === 'client';
	}


}	