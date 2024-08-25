import logo from './logo.svg';
import './App.css';
import User from './component/user/user';
import Name from './component/name/name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';


function App() {
  return (
    <div className="App">
       <Name />
       <Section />
       <Description />
    </div> 
  );
}

export default App;
