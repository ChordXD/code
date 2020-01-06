#include <bits/stdc++.h>
using namespace std;

#define DFS 1e-10

class Point
{
public:
    double x, y;
    Point(double x = 0, double y = 0) : x(x), y(y) {}
    Point operator+(Point a) { return Point(x + a.x, y + a.y); }
    Point operator-(Point a) { return Point(x - a.x, y - a.y); }
};

typedef Point Vector;
typedef vector<Point> Polygon;

double cross(Vector a, Vector b)
{
    return a.x * b.y - a.y * b.x;
}

double dot(Vector a, Vector b)
{
    return a.x * b.x + a.y * b.y;
}

int contains(Polygon g, Point p)
{
    int n = g.size();
    bool x = false;
    for (int i = 0; i < n; i++)
    {
        Point a = g[i] - p, b = g[(i + 1) % n] - p;
        if (abs(cross(a, b)) < DFS && dot(a, b) < DFS)
            return 2;
        if (a.y > b.y)
            swap(a, b);
        if (a.y < DFS && DFS < b.y && cross(a, b) > DFS)
            x = !x;
    }
    return (x ? 2 : 0);
}

int main(void)
{
    //freopen("1.in", "r", stdin);
    //freopen("1.out", "w", stdout);
    int n;
    while (cin >> n)
    {
        Polygon g;
        for (int i = 0; i < n; i++)
        {
            Point temp;
            cin >> temp.x >> temp.y;
            g.push_back(temp);
        }
        int m, ans = 0;
        cin >> m;
        while (m--)
        {
            Point temp;
            cin >> temp.x >> temp.y;
            if (contains(g, temp) == 2)
                ans++;
        }
        cout << ans << endl;
    }
    return 0;
}