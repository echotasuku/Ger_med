import React from 'react';
import { BrowserRouter as Router, Routes, Route, Navigate } from 'react-router-dom';
import Sidebar from './pages/Sidebar';
import Home from './pages/Home';
import Categorias from './components/Categorias';
import Fornecedores from './components/Fornecedores';
import Retiradas from './components/Retiradas';
import Farmaceuticos from './components/Farmaceuticos';
import Medicamentos from './components/Medicamentos';
import Estoque from './components/Estoque';
import './App.css';

const App = () => {
  return (
    <Router>
      <div className="App">
        <Sidebar />
        <div className="content">
          <Routes>
            <Route path="/" element={<Navigate to="/home" />} />
            <Route path="/home" element={<Home />} />

            {/* Rotas acessíveis para todos os usuários */}
            <Route path="/retiradas" element={<Retiradas />} />

            {/* Rotas para funcionalidades */}
            <Route path="/categorias" element={<Categorias />} />
            <Route path="/fornecedores" element={<Fornecedores />} />
            <Route path="/farmaceuticos" element={<Farmaceuticos />} />
            <Route path="/medicamentos" element={<Medicamentos />} />
            <Route path="/estoque" element={<Estoque />} />
          </Routes>
        </div>
      </div>
    </Router>
  );
};

export default App;
