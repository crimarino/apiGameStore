import { Component } from '@angular/core';
import { MenuItem } from 'primeng/api';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'client';
}

export class MenuDemo {

  private items: MenuItem[];

  ngOnInit() {
      this.items = [{
          label: 'File',
          items: [
              {label: 'New', icon: 'fa fa-plus'},
              {label: 'Open', icon: 'fa fa-download'}
          ]
      },
      {
          label: 'Edit',
          items: [
              {label: 'Undo', icon: 'fa fa-refresh'},
              {label: 'Redo', icon: 'fa fa-repeat'}
          ]
      }];
  }
}