// The Shape interface defines a contract for calculating the area of a shape

interface Shape {
    public function area();
}

// The Rectangle class implements the Shape interface and calculates its area based on width and height

class Rectangle implements Shape {
    public function area() {
        return $this->width * $this->height;
    }
}

// The Circle class implements the Shape interface and calculates its area based on the radius

class Circle implements Shape {
    public function area() {
        return Math.PI * $this->radius * $this->radius;
    }
}

// The calculateArea function accepts any object that implements the Shape interface

function calculateArea(Shape $shape) {
    return $shape->area();
}