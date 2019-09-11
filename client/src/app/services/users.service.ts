import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { User } from '../models/User';

@Injectable({
  providedIn: 'root'
})
export class UsersService {

  constructor(private http: HttpClient) { }

  API_URI = 'http://127.0.0.1:8000/api';

    getUser(email: string) {
      return this.http.get(`${this.API_URI}/user/${email}`);
    } 
  
    saveUser(user: User) {
      return this.http.post(`${this.API_URI}/user`, user);
    }
}