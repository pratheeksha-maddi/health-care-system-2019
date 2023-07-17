#include<GL/glut.h>
#include<stdlib.h>
float x1, y1, x2, y2, x3, y3, x4, y4;
void init()
{
glClearColor(1.0, 1.0, 1.0, 1.0);
glMatrixMode(GL_PROJECTION);
gluOrtho2D(-500, 500, -500, 500);
}
void display()
{
glClear(GL_COLOR_BUFFER_BIT);
glFlush();
}
void edgeDetect(float x1, float y1, float x2, float y2, int* le, int* re)
{
int mx, x=0, temp, i;
if (y2 - y1 < 0)
{
temp = y1;
y1 = y2;
y2 = temp;
temp = x1;
x1 = x2;
x2 = temp;
}

if (y2 - y1 != 0)
mx = (x2 - x1) / (y2 - y1);
else
{
mx = (x2 - x1);
}
x = x1;
for (i = y1; i <= y2; i++)
{
if (x < (float)le[i])
le[i] = (int) x;
if (x > (float) re[i])
re[i] = (int)x;
x += mx;
}
}
void drawPixel(int x, int y)
{
glBegin(GL_POINTS);
glVertex2i(x, y);
glEnd();
glFlush();
}
void scanFill(float x1, float y1, float x2, float y2, float x3, float y3, float x4, float y4)
{
int le[500], re[500], i, j;
for (i = 0; i < 500; i++)
{
le[i] = 500;
re[i] = 0;
}
edgeDetect(x1, y1, x2, y2, le, re);
edgeDetect(x2, y2, x3, y3, le, re);
edgeDetect(x3, y3, x4, y4, le, re);
edgeDetect(x4, y4, x1, y1, le, re);
for (i = 0; i < 500; i++)
{
if (le[i] <= re[i])
for (j = (int)le[i]; j < (int)re[i]; j++)
drawPixel(j, i);
}
}
void select(int ch)
{
switch (ch)
{
case 1: x1 = 200, y1 = 200, x2 = 100, y2 = 300, x3 = 200, y3 = 400, x4 = 300, y4 = 300;
glColor3f(1.0, 0.0, 0.0);
glBegin(GL_LINE_LOOP);
glVertex2i(x1, y1);
glVertex2i(x2, y2);
glVertex2i(x3, y3);
glVertex2i(x4, y4);
glEnd();
scanFill(x1, y1, x2, y2, x3, y3, x4, y4);
glFlush();
break;

case 2: x1 = 200, y1 = 200, x2 = 100, y2 = 300, x3 = 200, y3 = 400, x4 = 300, y4 = 300;
glColor3f(0.0, 1.0, 0.0);
glBegin(GL_LINE_LOOP);
glVertex2i(x1, y1);
glVertex2i(x2, y2);
glVertex2i(x3, y3);
glVertex2i(x4, y4);
glEnd();
scanFill(x1, y1, x2, y2, x3, y3, x4, y4);
glFlush();
break;

case 3: x1 = 200, y1 = 200, x2 = 100, y2 = 300, x3 = 200, y3 = 400, x4 = 300, y4 = 300;
glColor3f(0.0, 0.0, 1.0);
glBegin(GL_LINE_LOOP);
glVertex2i(x1, y1);
glVertex2i(x2, y2);
glVertex2i(x3, y3);
glVertex2i(x4, y4);
glEnd();
scanFill(x1, y1, x2, y2, x3, y3, x4, y4);
glFlush();
break;

//default:printf("Invalid");
}
}
void main(int argc, char** argv)
{
glutInit(&argc, argv);
glutInitDisplayMode(GLUT_SINGLE | GLUT_RGB);
glutInitWindowSize(1000, 1000);
glutInitWindowPosition(0, 0);
glutCreateWindow("Scan Line Filling");
init();
glutDisplayFunc(display);
glutCreateMenu(select);
glutAddMenuEntry("RED", 1);
glutAddMenuEntry("GREEN", 2);
glutAddMenuEntry("BLUE", 3);
glutAttachMenu(GLUT_RIGHT_BUTTON);
glutMainLoop();
}