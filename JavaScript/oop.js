var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    }
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var student = /** @class */ (function () {
    function student(studentid, studentname) {
        this.studentid = studentid;
        this.studentname = studentname;
    }
    student.prototype.doDisplayInfo = function () {
        return "<br>" + "Student Number: " + this.studentname;
    };
    return student;
}());
var GraduatedStudent = /** @class */ (function (_super) {
    __extends(GraduatedStudent, _super);
    function GraduatedStudent(studentid, studentname, membershipnumber) {
        var _this = _super.call(this, studentid, studentname) || this;
        _this.membershipnumber = membershipnumber;
        return _this;
    }
    GraduatedStudent.prototype.doDisplayInfo = function () {
        return _super.prototype.doDisplayInfo.call(this) + "<br>" + "Membership Number: " + this.membershipnumber;
    };
    return GraduatedStudent;
}(student));
var myGraduatedStudent = new GraduatedStudent(1, "John", 1);
console.log(myGraduatedStudent.doDisplayInfo());
