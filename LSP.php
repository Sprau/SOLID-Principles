// Интерфейс Bird определяет контракт для летающей птицы

interface Bird {
    public function fly();
}

// Класс Duck реализует интерфейс Bird и переопределяет метод fly

class Duck implements Bird {
    public function fly() {
        echo "Duck flying";
    }
}

// Класс Penguin реализует интерфейс Bird, но не может fly, поэтому он переопределяет метод fly пустой реализацией

class Penguin implements Bird {
    public function fly() {
        // Penguins can't fly
    }
}