import { NgModule, Component } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

/* import { GameListComponent } from './components/game-list/game-list.component';
import { GameFormComponent } from './components/game-form/game-form.component';
import { SignupComponent } from './components/signup/signup.component';*/
import { HomeComponent } from './components/home/home.component'; 
import { GameListComponent } from './components/game-list/game-list.component'; 


const routes: Routes = [

  {
    path: '',
    redirectTo: '/',
    pathMatch: 'full'
  },

  {
    path: 'home',
    component: HomeComponent
  },
  {
    path: 'game',
    component: GameListComponent
  }/*
  {
    path: 'signup',
    component: SignupComponent
  },

  {
    path: 'game',
    component: GameListComponent
  },
  {
    path: 'game/add',
    component: GameFormComponent
  },
  {
    path: 'game/edit/:id',
    component: GameFormComponent
  } */
  

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }