import React, { useEffect, useState } from "react";
import apiService from "../services/apiService";

const Exhibitions = () => {
  const [exhibitions, setExhibitions] = useState([]);
  useEffect(() => {
    apiService
      .getExhibitionsData()
      .then((response) => {
        setExhibitions(response.data);
      })
      .catch((error) => {
        console.log(error);
      });
  });
  return (
    <section className="exhibitions">
      {exhibitions?.length > 0 && exhibitions.map((event) => (
          <div key={event.id}>
            <img src={event?.acf?.thumbEvent} alt={event.acf.alt} />
            <h1>{event?.title?.rendered} </h1>
            <div dangerouslySetInnerHTML={{ __html: event?.acf?.['texts-courses'] }} />
        </div> 
      ))}
    </section>
  );
};

export default Exhibitions;
