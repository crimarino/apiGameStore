import { Component, OnInit, HostBinding } from '@angular/core';
import { User } from 'src/app/models/User'


import { UsersService } from '../../services/users.service';
import { Router, ActivatedRoute } from '@angular/router';
/* import * as CryptoJS from 'crypto-js'; */

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})

export class SignupComponent implements OnInit {

  encPassword: string;

  @HostBinding('class') classes = 'row';
  user: User = {
    id: 0,
    name:'',
    email:'',
    password:''
  }

  constructor(private userService: UsersService, private router: Router, private activatedRoute: ActivatedRoute) { }

  ngOnInit() {
  }
  

  saveNewUser(){
    /* this.encPassword = this.user.email;
    this.user.password = CryptoJS.AES.encrypt(this.user.password.trim(), this.encPassword.trim()).toString(); */
    this.userService.saveUser(this.user)
      .subscribe(
        res => {
          console.log(res);
          this.router.navigate(['/']);
        },
        err => console.error(err)
      )  }
}