import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';
import apiService from '../services/apiService';

const Page = () => {
  const { slug } = useParams();
  const [pagina, setPagina] = useState(null);

  useEffect(() => {

    apiService.getPageBySlug(slug)
      .then(response => {
        setPagina(response.data);
      })
      .catch(error => {
        console.error("Erro ao carregar a página:", error);
      });
  }, [slug]);

  if (!pagina) return <div>Carregando...</div>;

  return (
    <div>
      <h1>{pagina.title.rendered}</h1>
      <div dangerouslySetInnerHTML={{ __html: pagina.content.rendered }} />
    </div>
  );
};

export default Page;
