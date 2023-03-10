class Mammal {
    constructor(n = '', c = '', a = 0) {
      this.name = n;
      this.color = c;
      this.age = a;
    }
  
    getName() {
      return this.name;
    }
  
    getColor() {
      return this.color;
    }
  
    getAge() {
      return this.age;
    }
  
    eat() {
      return "schmatz schmatz";
    }
  
    sleep() {
      return "schnarch schnarch";
    }
  
    greet() {
      return "Hello World!";
    }
  }
  
  class Dog extends Mammal {
    greet() {
      return "Woof Woof";
    }
  }
  
  class Cat extends Mammal {
    eat() {
      return "Mapf Mapf";
    }
  
    greet() {
      return "Miau Miau";
    }
  }
  
  class Whale extends Mammal {
    eat() {
      return "schrumpf blubb";
    }
  
    sleep() {
      return "... (silence)";
    }
  
    greet() {
      return "Piiipp";
    }
  }