import { Component, OnInit, HostBinding } from '@angular/core';
import { User } from 'src/app/models/User';

import { UsersService } from 'src/app/services/users.service';
import { Router, ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})

export class HomeComponent implements OnInit {

  @HostBinding('class') clases = 'row';

   user: User = {
    email: '',
    password: ''
  };

  constructor(private userService: UsersService, private router: Router, private activatedRoute: ActivatedRoute) { }

  ngOnInit() {
  }

    getInfoUser() {
    const params = this.user.email;
    if (params) {
      this.userService.getUser(params)
        .subscribe(
          res => {
            console.log(res);
            this.router.navigate(['/game']);
          },
          err => console.log(err)
        )
    }
  }
}