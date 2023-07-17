
---------- Forwarded message ---------
From: SAI SRUJAN T <saisrujant@gmail.com>
Date: Tue, Feb 25, 2020, 15:52
Subject: tetra
To: saishravant <saishravant@gmail.com>


#include<GL/glut.h>
#include<stdlib.h>
#include<stdio.h>
typedef GLint point[4];
int n;
point v[4] = { {30,50,100},{0,450,-150},{-350,-400,-150},{350,-400,-150}};

void triangle(point a, point b, point c)
{
glBegin(GL_TRIANGLES);
glVertex3iv(a);
glVertex3iv(b);
glVertex3iv(c);
glEnd();
}

void tetra(point a, point b, point c, point d)
{
glColor3f(1.0, 0.0, 0.0);
triangle(a, b, c);
glColor3f(0.0, 1.0, 0.0);
triangle(a, c, d);
glColor3f(0.0, 0.0, 0.0);
triangle(a, b, d);
glColor3f(0.0, 0.0, 1.0);
triangle(b, c, d);
}

void divide_tetra(point a, point b, point c, point d,int n)
{
int m[6][3];
int j;
if (n > 0)
{
for (j = 0; j < 3; j++) m[0][j] = (a[j] + b[j]) / 2;
for (j = 0; j < 3; j++) m[1][j] = (b[j] + c[j]) / 2;
for (j = 0; j < 3; j++) m[2][j] = (c[j] + d[j]) / 2;
for (j = 0; j < 3; j++) m[3][j] = (b[j] + d[j]) / 2;
for (j = 0; j < 3; j++) m[4][j] = (a[j] + c[j]) / 2;
for (j = 0; j < 3; j++) m[5][j] = (a[j] + d[j]) / 2;
divide_tetra(b, m[1], m[3], m[0], n - 1);
divide_tetra(m[1], c, m[2], m[4], n - 1);
divide_tetra(m[3], m[2], d, m[5], n - 1);
divide_tetra(m[0], m[4], m[5], a, n - 1);
}
else
tetra(a, b, c, d);
}
void Display()
{
glEnable(GL_DEPTH_TEST);
glClearColor(1.0, 1.0, 1.0, 1.0);
glClear(GL_COLOR_BUFFER_BIT|GL_DEPTH_BUFFER_BIT);
divide_tetra(v[0], v[1], v[2], v[3], n);
glFlush();
}

void myinit()
{
glMatrixMode(GL_PROJECTION);
glLoadIdentity();
glOrtho(-499, 499, -499, 499, -499, 499);
glMatrixMode(GL_MODELVIEW);
}

void main(int argc, char** argv)
{
glutInit(&argc, argv);
printf("enter the no of division");
scanf("%d", &n);
glutInitDisplayMode(GLUT_SINGLE | GLUT_RGB | GLUT_DEPTH);
glutInitWindowSize(500, 500);
glutCreateWindow("3-d tetrahedron");
glEnable(GL_DEPTH);
myinit();
glutDisplayFunc(Display);
glutMainLoop();
}