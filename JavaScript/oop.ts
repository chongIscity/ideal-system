class student {
	private studentid:number;
	private studentname:string;

	constructor (studentid:number,studentname:string){
		this.studentid = studentid;
		this.studentname = studentname;
	}

	doDisplayInfo():string{
		return "<br>" + "Student Number: " + this.studentname;
	}
}

class GraduatedStudent extends student{
	private membershipnumber:number;

	constructor(studentid:number,studentname:string,membershipnumber:number){
		super(studentid,studentname);
		this.membershipnumber = membershipnumber;
	}

	doDisplayInfo():string{
		return super.doDisplayInfo() + "<br>" + "Membership Number: " + this.membershipnumber;
	}
}

let myGraduatedStudent:GraduatedStudent = new GraduatedStudent(1,"John",1);
console.log(myGraduatedStudent.doDisplayInfo());