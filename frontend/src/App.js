import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import Homepage from './pages/Homepage';
import About from './pages/About';
import Apply from './pages/ApplyTheSchool';
import Contact from './pages/Contact';
import Exhibitions from './pages/Exhibitions';
import News from './pages/News';
import Publication from './pages/Publication';
import Page from './pages/Page';
import Header from './components/Header';
import Footer from './components/Footer';

function App() {
  return (
    <Router>
      <div>
        <Header />
        <main>
          <Routes>
            <Route exact path="/" element={<Homepage/>} />
            <Route path="/about" element={<About />} />
            {/* <Route path="/apply" element={<Apply />} />
            <Route path="/contact" element={<Contact />} />
            <Route path="/exhibitions" element={<Exhibitions />} />
            <Route path="/news" element={<News />} />
            <Route path="/publication" element={<Publication />} /> */}
            <Route path="/:slug" element={Page} />
          </Routes>
        </main>
        <Footer />
      </div>
    </Router>
  );
}

export default App;
